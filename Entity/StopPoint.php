<?php

namespace CanalTP\MttBundle\Entity;

/**
 * StopPoint
 */
class StopPoint extends AbstractEntity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $externalId;

    /**
     * @var Object
     */
    private $timetable;

    /**
     * @var Object
     */
    private $line;

    /**
     * @var Object
     */
    private $blocks;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $externalCode;

    /**
     * @var string
     */
    private $pois;

    /**
     * @var integer
     */
    private $poisDistance;

    /**
     * @var datetime
     */
    protected $pdfGenerationDate;

    /**
     * @var binary
     */
    protected $pdfHash;

    public function __construct()
    {
        $this->pois = array();
        $this->poiDistance = 0;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set externalId
     *
     * @param  string $externalId
     * @return Line
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Get external Id
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Set timetable
     *
     * @param  string    $timetable
     * @return StopPoint
     */
    public function setTimetable($timetable)
    {
        $this->timetable = $timetable;

        return $this;
    }

    /**
     * Get timetable
     *
     * @return Object
     */
    public function getTimetable()
    {
        return $this->timetable;
    }

    /**
     * Set line
     *
     * @param integer $line
     *
     * @return StopPoint
     */
    public function setLine($line)
    {
        $this->line = $line;

        return $this;
    }

    /**
     * Get line
     *
     * @return string
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set blocks
     *
     * @param  array $blocks
     * @return Line
     */
    public function setBlocks($blocks)
    {
        $this->blocks = $blocks;

        return $this;
    }

    /**
     * Get blocks
     *
     * @return array
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param  string    $title
     * @return StopPoint
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get externalCode
     *
     * @return string
     */
    public function getExternalCode()
    {
        return $this->externalCode;
    }

    /**
     * Set externalCode
     *
     * @param  string    $externalCode
     * @return StopPoint
     */
    public function setExternalCode($externalCode)
    {
        $this->externalCode = $externalCode;

        return $this;
    }

    /**
     * Get pois
     *
     * @return string
     */
    public function getPoiDistance()
    {
        return $this->poiDistance;
    }

    /**
     * Set pois_distance
     *
     * @param  integer   $poiDistance
     * @return StopPoint
     */
    public function setPoiDistance($poiDistance)
    {
        $this->poiDistance = $poiDistance;

        return $this;
    }

    /**
     * Get pois_distance
     *
     * @return string
     */
    public function getPois()
    {
        return $this->pois;
    }

    /**
     * Set pois
     *
     * @param  string    $poi
     * @return StopPoint
     */
    public function setPois($pois)
    {
        $this->pois = $pois;

        return $this;
    }

    /**
     * Get pdfGenerationDate
     *
     * @return string
     */
    public function getPdfGenerationDate()
    {
        return ($this->pdfGenerationDate);
    }

    /**
     * Set pdfGenerationDate
     *
     * @param  string    $pdfGenerationDate
     * @return StopPoint
     */
    public function setPdfGenerationDate($pdfGenerationDate)
    {
        $this->pdfGenerationDate = $pdfGenerationDate;

        return $this;
    }

    /**
     * Get pdfHash
     *
     * @return string
     */
    public function getPdfHash()
    {
        return ($this->pdfHash);
    }

    /**
     * Set pdfHash
     *
     * @param  string    $pdfHash
     * @return StopPoint
     */
    public function setPdfHash($pdfHash)
    {
        $this->pdfHash = $pdfHash;

        return $this;
    }

    public function __clone()
    {
        $this->pdfGenerationDate = null;
        $this->pdfHash = null;
    }
}
