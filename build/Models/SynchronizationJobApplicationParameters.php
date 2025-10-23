<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationJobApplicationParameters
 */
class SynchronizationJobApplicationParameters
{
    /** The identifier of the synchronizationRule to be applied. This rule ID is defined in the schema for a given synchronization job or template. */
    public ?string $ruleId = null;

    /** 
     * The identifiers of one or more objects to which a synchronizationJob is to be applied.
     * @var SynchronizationJobSubject[]
     */
    public array $subjects = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['ruleId'])) {
            $this->ruleId = $data['ruleId'];
        }
        if (isset($data['subjects'])) {
            $this->subjects = $data['subjects'];
        }
    }
}
