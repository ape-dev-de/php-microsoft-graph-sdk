<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RubricCriterion
 */
class RubricCriterion
{
    /** 
     * The description of this criterion.
     * @var EducationItemBody|\stdClass|null
     */
    public mixed $description = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
    }
}
