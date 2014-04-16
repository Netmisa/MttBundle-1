<?php

namespace CanalTP\MttBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * DistributionListRepositoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DistributionListRepository extends EntityRepository
{
    private function findScheduleKey($scheduleId, $schedules)
    {
        while (list($key, $schedule) = each($schedules)) {
            if ($schedule->stop_point->id == $scheduleId) {
                return $key;
            }
        }
    }

    private function compare($a, $b)
    {
        return $a->stop_point->id === $b->stop_point->id ? 0 : 1;
    }

    public function sortSchedules($schedules, $networkId, $externalRouteId, $reset = false)
    {
        $distributionList = $this->findOneBy(
            array(
                'network' => $networkId,
                'externalRouteId' => $externalRouteId
            )
        );
        $sortedSchedules = array();
        $sortedSchedules['included'] = array();
        $sortedSchedules['excluded'] = array();
        if (empty($distributionList) || $reset == 1) {
            $sortedSchedules['included'] = $schedules;
        }
        if (!empty($distributionList)) {
            $includedStops = $distributionList->getIncludedStops();
            foreach ($includedStops as $scheduleId) {
                $key = $this->findScheduleKey($scheduleId, $schedules);
                if ($reset == false) {
                    $sortedSchedules['included'][] = clone $schedules[$key];
                }
                unset($schedules[$key]);
                reset($schedules);
            }
            $sortedSchedules['excluded'] = $schedules;
            if ($reset == 1) {
                $sortedSchedules['included'] = array_udiff_assoc($sortedSchedules['included'], $schedules, array($this, "compare"));
            }
        }

        return $sortedSchedules;
    }
}
