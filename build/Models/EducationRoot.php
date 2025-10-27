<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationRoot
 */
class EducationRoot
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var EducationClass[]
     */
    public array $classes = [];

    /** 
     * 
     * @var EducationUser|\stdClass|null
     */
    public EducationUser|\stdClass|null $me = null;

    /** 
     * 
     * @var ReportsRoot|\stdClass|null
     */
    public ReportsRoot|\stdClass|null $reports = null;

    /** 
     * 
     * @var EducationSchool[]
     */
    public array $schools = [];

    /** 
     * 
     * @var EducationUser[]
     */
    public array $users = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['classes'])) {
            $this->classes = $data['classes'];
        }
        if (isset($data['me'])) {
            $this->me = is_array($data['me']) ? new EducationUser($data['me']) : $data['me'];
        }
        if (isset($data['reports'])) {
            $this->reports = is_array($data['reports']) ? new ReportsRoot($data['reports']) : $data['reports'];
        }
        if (isset($data['schools'])) {
            $this->schools = $data['schools'];
        }
        if (isset($data['users'])) {
            $this->users = $data['users'];
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
