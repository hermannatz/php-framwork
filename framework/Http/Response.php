<?php
/**
 * Description
 *
 * @package  CodeBrain\Framework\Http
 * @since    1.0.0
 * @author   HermannAzong
 * @link     http://code-brain.com
 * @licence  GNU General Public license 2.0+
 */

namespace CodeBrain\Framework\Http;

class Response
{
	public function __construct(
		private ?string $content = '',
		private int $status = 200,
		private array $headers = []
	)
	{
	}

	public function send(): void
	{
		echo $this->content;
	}

}