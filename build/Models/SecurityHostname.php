<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityHostname
 */
class SecurityHostname
{
    /**
     * The company or individual who registered this hostname, from WHOIS data.
     */
    private ?string $registrant;

    /**
     * The registrar for this hostname, from WHOIS data.
     */
    private ?string $registrar;


    public function getRegistrant(): ?string
    {
        return $this->registrant;
    }

    public function setRegistrant(?string $registrant): self
    {
        $this->registrant = $registrant;
        return $this;
    }

    public function getRegistrar(): ?string
    {
        return $this->registrar;
    }

    public function setRegistrar(?string $registrar): self
    {
        $this->registrar = $registrar;
        return $this;
    }

}
