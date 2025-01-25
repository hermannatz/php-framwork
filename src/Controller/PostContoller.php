<?php
/**
 * Description
 *
 * @package  App\Controller
 * @since    1.0.0
 * @author   HermannAzong
 * @link     http://code-brain.com
 * @licence  GNU General Public license 2.0+
 */

namespace App\Controller;

use CodeBrain\Framework\Http\Response;

class PostContoller
{
	public function show(int $id): Response
	{
		$content = "This is post {$id}";
		return new Response($content);
	}

}