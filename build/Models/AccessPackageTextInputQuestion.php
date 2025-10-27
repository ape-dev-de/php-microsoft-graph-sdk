<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageTextInputQuestion
 */
class AccessPackageTextInputQuestion
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Specifies whether the requestor is allowed to edit answers to questions for an assignment by posting an update to accessPackageAssignmentRequest. */
    public ?bool $isAnswerEditable = null;

    /** Whether the requestor is required to supply an answer or not. */
    public ?bool $isRequired = null;

    /** 
     * The text of the question represented in a format for a specific locale.
     * @var AccessPackageLocalizedText[]
     */
    public array $localizations = [];

    /** Relative position of this question when displaying a list of questions to the requestor. */
    public ?float $sequence = null;

    /** The text of the question to show to the requestor. */
    public ?string $text = null;

    /** Indicates whether the answer is in single or multiple line format. */
    public ?bool $isSingleLineQuestion = null;

    /** The regular expression pattern that any answer to this question must match. */
    public ?string $regexPattern = null;


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
        if (isset($data['isAnswerEditable'])) {
            $this->isAnswerEditable = $data['isAnswerEditable'];
        }
        if (isset($data['isRequired'])) {
            $this->isRequired = $data['isRequired'];
        }
        if (isset($data['localizations'])) {
            $this->localizations = $data['localizations'];
        }
        if (isset($data['sequence'])) {
            $this->sequence = $data['sequence'];
        }
        if (isset($data['text'])) {
            $this->text = $data['text'];
        }
        if (isset($data['isSingleLineQuestion'])) {
            $this->isSingleLineQuestion = $data['isSingleLineQuestion'];
        }
        if (isset($data['regexPattern'])) {
            $this->regexPattern = $data['regexPattern'];
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
