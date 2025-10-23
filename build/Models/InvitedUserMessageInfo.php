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
     * @var Recipient[]
     */
    public array $ccRecipients = [];

    /** Customized message body you want to send if you don't want the default message. Only plain text is allowed. */
    public ?string $customizedMessageBody = null;

    /** The language you want to send the default message in. If the customizedMessageBody is specified, this property is ignored, and the message is sent using the customizedMessageBody. The language format should be in ISO 639. The default is en-US. */
    public ?string $messageLanguage = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['ccRecipients'])) {
            $this->ccRecipients = $data['ccRecipients'];
        }
        if (isset($data['customizedMessageBody'])) {
            $this->customizedMessageBody = $data['customizedMessageBody'];
        }
        if (isset($data['messageLanguage'])) {
            $this->messageLanguage = $data['messageLanguage'];
        }
    }
}
