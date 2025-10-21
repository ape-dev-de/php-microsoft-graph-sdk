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
        public ?string $me = null,
        /**  */
        public ?string $reports = null,
        /**  */
        public array $schools = [],
        /** @var string[]  */
        public array $users = []
    ) {}
}
