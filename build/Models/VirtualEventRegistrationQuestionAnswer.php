<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationQuestionAnswer
 */
class VirtualEventRegistrationQuestionAnswer
{
    /** Boolean answer of the virtual event registration question. Only appears when answerInputType is boolean. */
    public ?bool $booleanValue = null;

    /** Display name of the registration question. */
    public ?string $displayName = null;

    /** 
     * Collection of text answer of the virtual event registration question. Only appears when answerInputType is multiChoice.
     * @var string[]
     */
    public array $multiChoiceValues = [];

    /** id of the virtual event registration question. */
    public ?string $questionId = null;

    /** Text answer of the virtual event registration question. Appears when answerInputType is text, multilineText or singleChoice. */
    public ?string $value = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['booleanValue'])) {
            $this->booleanValue = $data['booleanValue'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['multiChoiceValues'])) {
            $this->multiChoiceValues = $data['multiChoiceValues'];
        }
        if (isset($data['questionId'])) {
            $this->questionId = $data['questionId'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
