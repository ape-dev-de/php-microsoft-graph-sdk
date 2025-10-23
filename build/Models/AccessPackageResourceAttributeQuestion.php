<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageResourceAttributeQuestion
 */
class AccessPackageResourceAttributeQuestion
{
    /** 
     * 
     * @var AccessPackageQuestion|\stdClass|null
     */
    public mixed $question = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['question'])) {
            $this->question = $data['question'];
        }
    }
}
