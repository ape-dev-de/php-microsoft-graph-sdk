<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DomainDnsMxRecord
 */
class DomainDnsMxRecord
{
    /**
     * Value used when configuring the answer/destination/value of the MX record at the DNS host.
     */
    private ?string $mailExchange;

    /**
     * Value used when configuring the Preference/Priority property of the MX record at the DNS host.
     */
    private ?string $preference;

    public function getMailExchange(): ?string
    {
        return $this->mailExchange;
    }

    public function setMailExchange(?string $mailExchange): self
    {
        $this->mailExchange = $mailExchange;
        return $this;
    }

    public function getPreference(): ?string
    {
        return $this->preference;
    }

    public function setPreference(?string $preference): self
    {
        $this->preference = $preference;
        return $this;
    }

}
