<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AudioConferencing
 */
class AudioConferencing
{
    /**
     * The conference id of the online meeting.
     */
    private ?string $conferenceId;

    /**
     * A URL to the externally-accessible web page that contains dial-in information.
     */
    private ?string $dialinUrl;

    /**
     * The toll-free number that connects to the Audio Conference Provider.
     */
    private ?string $tollFreeNumber;

    /**
     * List of toll-free numbers that are displayed in the meeting invite.
     * @var string[]
     */
    private array $tollFreeNumbers = [];

    /**
     * The toll number that connects to the Audio Conference Provider.
     */
    private ?string $tollNumber;

    /**
     * List of toll numbers that are displayed in the meeting invite.
     * @var string[]
     */
    private array $tollNumbers = [];


    public function getConferenceId(): ?string
    {
        return $this->conferenceId;
    }

    public function setConferenceId(?string $conferenceId): self
    {
        $this->conferenceId = $conferenceId;
        return $this;
    }

    public function getDialinUrl(): ?string
    {
        return $this->dialinUrl;
    }

    public function setDialinUrl(?string $dialinUrl): self
    {
        $this->dialinUrl = $dialinUrl;
        return $this;
    }

    public function getTollFreeNumber(): ?string
    {
        return $this->tollFreeNumber;
    }

    public function setTollFreeNumber(?string $tollFreeNumber): self
    {
        $this->tollFreeNumber = $tollFreeNumber;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTollFreeNumbers(): array
    {
        return $this->tollFreeNumbers;
    }

    /**
     * @param string[] $tollFreeNumbers
     */
    public function setTollFreeNumbers(array $tollFreeNumbers): self
    {
        $this->tollFreeNumbers = $tollFreeNumbers;
        return $this;
    }

    public function getTollNumber(): ?string
    {
        return $this->tollNumber;
    }

    public function setTollNumber(?string $tollNumber): self
    {
        $this->tollNumber = $tollNumber;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTollNumbers(): array
    {
        return $this->tollNumbers;
    }

    /**
     * @param string[] $tollNumbers
     */
    public function setTollNumbers(array $tollNumbers): self
    {
        $this->tollNumbers = $tollNumbers;
        return $this;
    }

}
