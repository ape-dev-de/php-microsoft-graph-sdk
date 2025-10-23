<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAnswerString
 */
class AccessPackageAnswerString
{
    /** The localized display value shown to the requestor and approvers. */
    public ?string $displayValue = null;

    /** 
     * 
     * @var AccessPackageQuestion|\stdClass|null
     */
    public mixed $answeredQuestion = null;

    /** The value stored on the requestor's user profile, if this answer is configured to be stored as a specific attribute. */
    public ?string $value = null;


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
            $this->answeredQuestion = is_array($data['answeredQuestion']) ? new AccessPackageQuestion($data['answeredQuestion']) : $data['answeredQuestion'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
        }
    }
}
