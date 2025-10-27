<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsUserFeedback
 */
class CallRecordsUserFeedback
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['rating'])) {
            $this->rating = is_array($data['rating']) ? new CallRecordsUserFeedbackRating($data['rating']) : $data['rating'];
        }
        if (isset($data['text'])) {
            $this->text = $data['text'];
        }
        if (isset($data['tokens'])) {
            $this->tokens = is_array($data['tokens']) ? new CallRecordsFeedbackTokenSet($data['tokens']) : $data['tokens'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
