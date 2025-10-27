<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingQuestionAnswer
 */
class BookingQuestionAnswer
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The answer given by the user in case the answerInputType is text. */
    public ?string $answer = null;

    /** 
     * The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
     * @var AnswerInputType|\stdClass|null
     */
    public mixed $answerInputType = null;

    /** 
     * In case the answerInputType is radioButton, this will consists of a list of possible answer values.
     * @var string[]
     */
    public array $answerOptions = [];

    /** Indicates whether it is mandatory to answer the custom question. */
    public ?bool $isRequired = null;

    /** The question. */
    public ?string $question = null;

    /** The ID of the custom question. */
    public ?string $questionId = null;

    /** 
     * The answers selected by the user.
     * @var string[]
     */
    public array $selectedOptions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['answer'])) {
            $this->answer = $data['answer'];
        }
        if (isset($data['answerInputType'])) {
            $this->answerInputType = is_array($data['answerInputType']) ? new AnswerInputType($data['answerInputType']) : $data['answerInputType'];
        }
        if (isset($data['answerOptions'])) {
            $this->answerOptions = $data['answerOptions'];
        }
        if (isset($data['isRequired'])) {
            $this->isRequired = $data['isRequired'];
        }
        if (isset($data['question'])) {
            $this->question = $data['question'];
        }
        if (isset($data['questionId'])) {
            $this->questionId = $data['questionId'];
        }
        if (isset($data['selectedOptions'])) {
            $this->selectedOptions = $data['selectedOptions'];
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
