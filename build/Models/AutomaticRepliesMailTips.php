<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AutomaticRepliesMailTips
 */
class AutomaticRepliesMailTips
{
    /** The automatic reply message. */
    public ?string $message = null;

    /** 
     * The language that the automatic reply message is in.
     * @var LocaleInfo|\stdClass|null
     */
    public mixed $messageLanguage = null;

    /** 
     * The date and time that automatic replies are set to end.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $scheduledEndTime = null;

    /** 
     * The date and time that automatic replies are set to begin.
     * @var DateTimeTimeZone|\stdClass|null
     */
    public mixed $scheduledStartTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['message'])) {
            $this->message = $data['message'];
        }
        if (isset($data['messageLanguage'])) {
            $this->messageLanguage = $data['messageLanguage'];
        }
        if (isset($data['scheduledEndTime'])) {
            $this->scheduledEndTime = $data['scheduledEndTime'];
        }
        if (isset($data['scheduledStartTime'])) {
            $this->scheduledStartTime = $data['scheduledStartTime'];
        }
    }
}
