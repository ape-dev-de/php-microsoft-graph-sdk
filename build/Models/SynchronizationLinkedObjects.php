<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationLinkedObjects
 */
class SynchronizationLinkedObjects
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var SynchronizationJobSubject|\stdClass|null
     */
    public mixed $manager = null;

    /** 
     * All group members that you would like to provision.
     * @var SynchronizationJobSubject[]
     */
    public array $members = [];

    /** 
     * 
     * @var SynchronizationJobSubject[]
     */
    public array $owners = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['manager'])) {
            $this->manager = is_array($data['manager']) ? new SynchronizationJobSubject($data['manager']) : $data['manager'];
        }
        if (isset($data['members'])) {
            $this->members = $data['members'];
        }
        if (isset($data['owners'])) {
            $this->owners = $data['owners'];
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
