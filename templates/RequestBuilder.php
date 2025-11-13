<?= "<?php\n" ?>

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\<?= $namespace ?>;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
<?php foreach ($imports as $import): ?>
use ApeDevDe\MicrosoftGraphSdk\Models\<?= $import ?>;
<?php endforeach; ?>
<?php
// Filter out any BaseRequestBuilder imports to prevent conflicts with the root BaseRequestBuilder
// Only filter exact "BaseRequestBuilder" class, not classes that contain it (like "AttachmentBaseRequestBuilder")
$filteredImports = array_filter($childBuilderImports, function($import) {
    // Extract the class name from the import path
    $parts = explode('\\', $import);
    $className = end($parts);
    // Only filter out the exact "BaseRequestBuilder" class, not subclasses
    return $className !== 'BaseRequestBuilder';
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
