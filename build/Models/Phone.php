<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Phone
 */
class Phone
{
    /**
     */
    private ?string $language;

    /**
     * The phone number.
     */
    private ?string $number;

    /**
     */
    private ?string $region;

    /**
     * The type of phone number. The possible values are: home, business, mobile, other, assistant, homeFax, businessFax, otherFax, pager, radio.
     */
    private ?string $type;


    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
