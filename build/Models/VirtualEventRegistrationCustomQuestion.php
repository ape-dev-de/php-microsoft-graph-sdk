<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationCustomQuestion
 */
class VirtualEventRegistrationCustomQuestion
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Display name of the registration question. */
    public ?string $displayName = null;

    /** Indicates whether an answer to the question is required. The default value is false. */
    public ?bool $isRequired = null;

    /** 
     * Answer choices when answerInputType is singleChoice or multiChoice.
     * @var string[]
     */
    public array $answerChoices = [];

    /** 
     * Input type of the registration question answer. Possible values are text, multilineText, singleChoice, multiChoice, boolean, and unknownFutureValue.
     * @var VirtualEventRegistrationQuestionAnswerInputType|\stdClass|null
     */
    public VirtualEventRegistrationQuestionAnswerInputType|\stdClass|null $answerInputType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isRequired'])) {
            $this->isRequired = is_bool($data['isRequired']) ? $data['isRequired'] : (bool)$data['isRequired'];
        }
        if (isset($data['answerChoices'])) {
            $this->answerChoices = $data['answerChoices'];
        }
        if (isset($data['answerInputType'])) {
            $this->answerInputType = is_string($data['answerInputType']) ? VirtualEventRegistrationQuestionAnswerInputType::tryFrom($data['answerInputType']) : $data['answerInputType'];
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
