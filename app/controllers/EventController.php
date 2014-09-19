<?php

class EventController extends BaseController
{
	public function show($id)
	{
		$event = $this->getEvent($id);
		return View::make('event.detail', ['event' => $event]);
	}

	protected function getEvent($id)
	{
		$path = app_path() . '/data/events.json';
		$content = file_get_contents($path);
		if (!$content)
		{
			App::abort(404);
		}

		Log::info($content);
		$events = json_decode($content);
		Log::info($events);
		foreach ($events as $event)
		{
			if ($event->id == $id)
			{
				return $event;
			}
		}

		App::abort(404);
	}
}
