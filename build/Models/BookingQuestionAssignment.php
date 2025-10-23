<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingQuestionAssignment
 */
class BookingQuestionAssignment
{
    /** Indicates whether it's mandatory to answer the custom question. */
    public ?bool $isRequired = null;

    /** The ID of the custom question. */
    public ?string $questionId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isRequired'])) {
            $this->isRequired = $data['isRequired'];
        }
        if (isset($data['questionId'])) {
            $this->questionId = $data['questionId'];
        }
    }
}
