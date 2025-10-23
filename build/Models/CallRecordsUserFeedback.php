<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsUserFeedback
 */
class CallRecordsUserFeedback
{
    /**  */
    public ?CallRecordsUserFeedbackRating $rating = null;

    /** The feedback text provided by the user of this endpoint for the session. */
    public ?string $text = null;

    /** 
     * The set of feedback tokens provided by the user of this endpoint for the session. This is a set of Boolean properties. The property names should not be relied upon since they may change depending on what tokens are offered to the user.
     * @var CallRecordsFeedbackTokenSet|\stdClass|null
     */
    public mixed $tokens = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['rating'])) {
            $this->rating = $data['rating'];
        }
        if (isset($data['text'])) {
            $this->text = $data['text'];
        }
        if (isset($data['tokens'])) {
            $this->tokens = $data['tokens'];
        }
    }
}
