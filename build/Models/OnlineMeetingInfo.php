<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeetingInfo
 */
class OnlineMeetingInfo
{
    /**
     * The ID of the conference.
     */
    private ?string $conferenceId;

    /**
     * The external link that launches the online meeting. This is a URL that clients launch into a browser and will redirect the user to join the meeting.
     */
    private ?string $joinUrl;

    /**
     * All of the phone numbers associated with this conference.
     */
    private array $phones = [];

    /**
     * The preformatted quick dial for this call.
     */
    private ?string $quickDial;

    /**
     * The toll free numbers that can be used to join the conference.
     * @var string[]
     */
    private array $tollFreeNumbers = [];

    /**
     * The toll number that can be used to join the conference.
     */
    private ?string $tollNumber;


    public function getConferenceId(): ?string
    {
        return $this->conferenceId;
    }

    public function setConferenceId(?string $conferenceId): self
    {
        $this->conferenceId = $conferenceId;
        return $this;
    }

    public function getJoinUrl(): ?string
    {
        return $this->joinUrl;
    }

    public function setJoinUrl(?string $joinUrl): self
    {
        $this->joinUrl = $joinUrl;
        return $this;
    }

    public function getPhones(): array
    {
        return $this->phones;
    }

    public function setPhones(array $phones): self
    {
        $this->phones = $phones;
        return $this;
    }

    public function getQuickDial(): ?string
    {
        return $this->quickDial;
    }

    public function setQuickDial(?string $quickDial): self
    {
        $this->quickDial = $quickDial;
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

}
