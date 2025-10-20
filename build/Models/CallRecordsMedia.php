<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsMedia
 */
class CallRecordsMedia
{
    /**
     * Device information associated with the callee endpoint of this media.
     */
    private ?string $calleeDevice;

    /**
     * Network information associated with the callee endpoint of this media.
     */
    private ?string $calleeNetwork;

    /**
     * Device information associated with the caller endpoint of this media.
     */
    private ?string $callerDevice;

    /**
     * Network information associated with the caller endpoint of this media.
     */
    private ?string $callerNetwork;

    /**
     * How the media was identified during media negotiation stage.
     */
    private ?string $label;

    /**
     * Network streams associated with this media.
     */
    private ?string $streams;

    public function getCalleeDevice(): ?string
    {
        return $this->calleeDevice;
    }

    public function setCalleeDevice(?string $calleeDevice): self
    {
        $this->calleeDevice = $calleeDevice;
        return $this;
    }

    public function getCalleeNetwork(): ?string
    {
        return $this->calleeNetwork;
    }

    public function setCalleeNetwork(?string $calleeNetwork): self
    {
        $this->calleeNetwork = $calleeNetwork;
        return $this;
    }

    public function getCallerDevice(): ?string
    {
        return $this->callerDevice;
    }

    public function setCallerDevice(?string $callerDevice): self
    {
        $this->callerDevice = $callerDevice;
        return $this;
    }

    public function getCallerNetwork(): ?string
    {
        return $this->callerNetwork;
    }

    public function setCallerNetwork(?string $callerNetwork): self
    {
        $this->callerNetwork = $callerNetwork;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function getStreams(): ?string
    {
        return $this->streams;
    }

    public function setStreams(?string $streams): self
    {
        $this->streams = $streams;
        return $this;
    }

}
