<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InvitedUserMessageInfo
 */
class InvitedUserMessageInfo
{
    /**
     * Additional recipients the invitation message should be sent to. Currently only one additional recipient is supported.
     */
    private array $ccRecipients = [];

    /**
     * Customized message body you want to send if you don't want the default message. Only plain text is allowed.
     */
    private ?string $customizedMessageBody;

    /**
     * The language you want to send the default message in. If the customizedMessageBody is specified, this property is ignored, and the message is sent using the customizedMessageBody. The language format should be in ISO 639. The default is en-US.
     */
    private ?string $messageLanguage;

    public function getCcRecipients(): array
    {
        return $this->ccRecipients;
    }

    public function setCcRecipients(array $ccRecipients): self
    {
        $this->ccRecipients = $ccRecipients;
        return $this;
    }

    public function getCustomizedMessageBody(): ?string
    {
        return $this->customizedMessageBody;
    }

    public function setCustomizedMessageBody(?string $customizedMessageBody): self
    {
        $this->customizedMessageBody = $customizedMessageBody;
        return $this;
    }

    public function getMessageLanguage(): ?string
    {
        return $this->messageLanguage;
    }

    public function setMessageLanguage(?string $messageLanguage): self
    {
        $this->messageLanguage = $messageLanguage;
        return $this;
    }

}
