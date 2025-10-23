<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TermColumn
 */
class TermColumn
{
    /** Specifies whether the column allows more than one value. */
    public ?bool $allowMultipleValues = null;

    /** Specifies whether to display the entire term path or only the term label. */
    public ?bool $showFullyQualifiedName = null;

    /** 
     * 
     * @var TermStoreTerm|\stdClass|null
     */
    public mixed $parentTerm = null;

    /** 
     * 
     * @var TermStoreSet|\stdClass|null
     */
    public mixed $termSet = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
}
