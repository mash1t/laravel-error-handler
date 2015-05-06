<?php namespace Winternight\LaravelErrorHandler\Events;

use \Exception;

use App\Events\Event;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;

/**
 * Class ExceptionEvent
 *
 * @package Winternight\LaravelErrorHandler\Events
 */
class ExceptionEvent extends Event {

	use SerializesModels;

	/**
	 * @var \Exception
	 */
	protected $exception;


	/**
	 * Create a new event instance.
	 *
	 * @param \Exception $exception
	 */
	public function __construct( Exception $exception ) {
		$this->exception = $exception;
	}

	/**
	 * Returns the exception instance.
	 *
	 * @return Exception
	 */
	public function getException() {
		return $this->exception;
	}

	/**
	 * Get the channels the event should be broadcast on.
	 *
	 * @return array
	 */
	public function broadcastOn() {
		return [ ];
	}
}
