<?php

declare(strict_types=1);

namespace SomehowDigital\Typo3\MediaProcessing\ImageService;

use SomehowDigital\Typo3\MediaProcessing\UriBuilder\UriInterface;
use TYPO3\CMS\Core\Resource\FileInterface;
use TYPO3\CMS\Core\Resource\Processing\TaskInterface;

interface ImageServiceInterface
{
	public function getEndpoint(): string;

	public function hasConfiguration(): bool;

	public function canProcessTask(TaskInterface $task): bool;

	public function buildUrl(
		FileInterface $file,
		array $configuration
	): UriInterface;
}
