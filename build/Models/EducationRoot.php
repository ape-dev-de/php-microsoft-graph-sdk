<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationRoot
 */
class EducationRoot
{
    /** 
     * 
     * @var EducationClass[]
     */
    public array $classes = [];

    /** 
     * 
     * @var EducationUser|\stdClass|null
     */
    public mixed $me = null;

    /** 
     * 
     * @var ReportsRoot|\stdClass|null
     */
    public mixed $reports = null;

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
        if (isset($data['classes'])) {
            $this->classes = $data['classes'];
        }
        if (isset($data['me'])) {
            $this->me = $data['me'];
        }
        if (isset($data['reports'])) {
            $this->reports = $data['reports'];
        }
        if (isset($data['schools'])) {
            $this->schools = $data['schools'];
        }
        if (isset($data['users'])) {
            $this->users = $data['users'];
        }
    }
}
