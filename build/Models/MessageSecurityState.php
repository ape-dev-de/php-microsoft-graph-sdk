<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MessageSecurityState
 */
class MessageSecurityState
{
    /**  */
    public ?string $connectingIP = null;

    /**  */
    public ?string $deliveryAction = null;

    /**  */
    public ?string $deliveryLocation = null;

    /**  */
    public ?string $directionality = null;

    /**  */
    public ?string $internetMessageId = null;

    /**  */
    public ?string $messageFingerprint = null;

    /**  */
    public ?\DateTimeInterface $messageReceivedDateTime = null;

    /**  */
    public ?string $messageSubject = null;

    /**  */
    public ?string $networkMessageId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['connectingIP'])) {
            $this->connectingIP = $data['connectingIP'];
        }
        if (isset($data['deliveryAction'])) {
            $this->deliveryAction = $data['deliveryAction'];
        }
        if (isset($data['deliveryLocation'])) {
            $this->deliveryLocation = $data['deliveryLocation'];
        }
        if (isset($data['directionality'])) {
            $this->directionality = $data['directionality'];
        }
        if (isset($data['internetMessageId'])) {
            $this->internetMessageId = $data['internetMessageId'];
        }
        if (isset($data['messageFingerprint'])) {
            $this->messageFingerprint = $data['messageFingerprint'];
        }
        if (isset($data['messageReceivedDateTime'])) {
            $this->messageReceivedDateTime = is_string($data['messageReceivedDateTime']) ? new \DateTimeImmutable($data['messageReceivedDateTime']) : $data['messageReceivedDateTime'];
        }
        if (isset($data['messageSubject'])) {
            $this->messageSubject = $data['messageSubject'];
        }
        if (isset($data['networkMessageId'])) {
            $this->networkMessageId = $data['networkMessageId'];
        }
    }
}
