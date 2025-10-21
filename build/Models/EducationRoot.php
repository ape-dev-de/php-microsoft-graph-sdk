<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationRoot
 */
class EducationRoot
{
    public function __construct(
        /**  */
        public array $classes = [],
        /**  */
        public ?EducationUser $me = null,
        /**  */
        public ?ReportsRoot $reports = null,
        /**  */
        public array $schools = [],
        /**  */
        public array $users = []
    ) {}
}
