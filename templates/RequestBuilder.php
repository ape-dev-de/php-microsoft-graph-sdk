<?= "<?php\n" ?>

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\<?= $namespace ?>;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
<?php foreach ($imports as $import): ?>
use ApeDevDe\MicrosoftGraphSdk\Models\<?= $import ?>;
<?php endforeach; ?>
<?php 
// Filter out any BaseRequestBuilder imports to prevent conflicts
$filteredImports = array_filter($childBuilderImports, function($import) {
    return strpos($import, 'BaseRequestBuilder') === false;
});

// Track imported class names to detect duplicates
$importedClasses = [];
?>
<?php foreach ($filteredImports as $import): ?>
<?php 
$importClassName = $import;
if (strpos($import, '\\') !== false) {
    $parts = explode('\\', $import);
    $importClassName = end($parts);
}

// Check for duplicate class names and add namespace as alias if needed
$alias = '';
if (in_array($importClassName, $importedClasses)) {
    $alias = ' as ' . str_replace('\\', '', $namespace) . $importClassName;
}
$importedClasses[] = $importClassName;
?>
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\<?= $namespace ?>\<?= $import ?><?= $alias ?>;
<?php endforeach; ?>

/**
 * Request builder for <?= $path ?>

 */
class <?= $className ?> extends RootBaseRequestBuilder
{
<?= $methods ?>
}
