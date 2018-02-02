<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */
class Event
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    private $name;

    /**
     * @var \DateTime
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;


    /**
     * @var EventPlace
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\EventPlace", inversedBy="events")
     */
    private $eventPlace;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Event
     */
    public function setName(string $name): Event
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return Event
     */
    public function setDate(\DateTime $date): Event
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @return EventPlace
     */
    public function getEventPlace(): EventPlace
    {
        return $this->eventPlace;
    }

    /**
     * @param EventPlace $eventPlace
     * @return Event
     */
    public function setEventPlace(EventPlace $eventPlace): Event
    {
        $this->eventPlace = $eventPlace;

        return $this;
    }
}