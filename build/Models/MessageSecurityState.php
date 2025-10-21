<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageSecurityState
 */
class MessageSecurityState
{
    /**
     */
    private ?string $connectingIP;

    /**
     */
    private ?string $deliveryAction;

    /**
     */
    private ?string $deliveryLocation;

    /**
     */
    private ?string $directionality;

    /**
     */
    private ?string $internetMessageId;

    /**
     */
    private ?string $messageFingerprint;

    /**
     */
    private ?\DateTimeInterface $messageReceivedDateTime;

    /**
     */
    private ?string $messageSubject;

    /**
     */
    private ?string $networkMessageId;


    public function getConnectingIP(): ?string
    {
        return $this->connectingIP;
    }

    public function setConnectingIP(?string $connectingIP): self
    {
        $this->connectingIP = $connectingIP;
        return $this;
    }

    public function getDeliveryAction(): ?string
    {
        return $this->deliveryAction;
    }

    public function setDeliveryAction(?string $deliveryAction): self
    {
        $this->deliveryAction = $deliveryAction;
        return $this;
    }

    public function getDeliveryLocation(): ?string
    {
        return $this->deliveryLocation;
    }

    public function setDeliveryLocation(?string $deliveryLocation): self
    {
        $this->deliveryLocation = $deliveryLocation;
        return $this;
    }

    public function getDirectionality(): ?string
    {
        return $this->directionality;
    }

    public function setDirectionality(?string $directionality): self
    {
        $this->directionality = $directionality;
        return $this;
    }

    public function getInternetMessageId(): ?string
    {
        return $this->internetMessageId;
    }

    public function setInternetMessageId(?string $internetMessageId): self
    {
        $this->internetMessageId = $internetMessageId;
        return $this;
    }

    public function getMessageFingerprint(): ?string
    {
        return $this->messageFingerprint;
    }

    public function setMessageFingerprint(?string $messageFingerprint): self
    {
        $this->messageFingerprint = $messageFingerprint;
        return $this;
    }

    public function getMessageReceivedDateTime(): ?\DateTimeInterface
    {
        return $this->messageReceivedDateTime;
    }

    public function setMessageReceivedDateTime(?\DateTimeInterface $messageReceivedDateTime): self
    {
        $this->messageReceivedDateTime = $messageReceivedDateTime;
        return $this;
    }

    public function getMessageSubject(): ?string
    {
        return $this->messageSubject;
    }

    public function setMessageSubject(?string $messageSubject): self
    {
        $this->messageSubject = $messageSubject;
        return $this;
    }

    public function getNetworkMessageId(): ?string
    {
        return $this->networkMessageId;
    }

    public function setNetworkMessageId(?string $networkMessageId): self
    {
        $this->networkMessageId = $networkMessageId;
        return $this;
    }

}
