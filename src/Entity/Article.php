<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 */
class Article
{
    /**
     * @var integer $id
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string $title
     *
     * @Assert\Length(min="8", minMessage="short")
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime $date
     *
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @var string $anonce
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $anonce;

    /**
     * @var string $body
     *
     * @ORM\Column(type="text")
     */
    private $body;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getAnonce(): ?string
    {
        return $this->anonce;
    }

    /**
     * @param string $anonce
     */
    public function setAnonce(string $anonce): void
    {
        $this->anonce = $anonce;
    }

    /**
     * @return string
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }



}
