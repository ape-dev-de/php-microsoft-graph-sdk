<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAnswer
 */
class AccessPackageAnswer
{
    /** The localized display value shown to the requestor and approvers. */
    public ?string $displayValue = null;

    /** 
     * 
     * @var AccessPackageQuestion|\stdClass|null
     */
    public mixed $answeredQuestion = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayValue'])) {
            $this->displayValue = $data['displayValue'];
        }
        if (isset($data['answeredQuestion'])) {
            $this->answeredQuestion = $data['answeredQuestion'];
        }
    }
}
