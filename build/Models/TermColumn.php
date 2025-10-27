<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermColumn
 */
class TermColumn
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Specifies whether the column allows more than one value. */
    public ?bool $allowMultipleValues = null;

    /** Specifies whether to display the entire term path or only the term label. */
    public ?bool $showFullyQualifiedName = null;

    /** 
     * 
     * @var TermStoreTerm|\stdClass|null
     */
    public TermStoreTerm|\stdClass|null $parentTerm = null;

    /** 
     * 
     * @var TermStoreSet|\stdClass|null
     */
    public TermStoreSet|\stdClass|null $termSet = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowMultipleValues'])) {
            $this->allowMultipleValues = $data['allowMultipleValues'];
        }
        if (isset($data['showFullyQualifiedName'])) {
            $this->showFullyQualifiedName = $data['showFullyQualifiedName'];
        }
        if (isset($data['parentTerm'])) {
            $this->parentTerm = is_array($data['parentTerm']) ? new TermStoreTerm($data['parentTerm']) : $data['parentTerm'];
        }
        if (isset($data['termSet'])) {
            $this->termSet = is_array($data['termSet']) ? new TermStoreSet($data['termSet']) : $data['termSet'];
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
