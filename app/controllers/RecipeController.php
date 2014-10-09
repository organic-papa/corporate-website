<?php

class RecipeController extends BaseController
{

	public function index()
	{
		$recipes = $this->getRecipes();
		return View::make('post.recipe.index', ['recipes' => $recipes]);
	}

	public function show($id)
	{
		$recipes = $this->getRecipes();
		$recipe = $this->getRecipe($id);
		return View::make('post.recipe.show', [
			'recipes' => $recipes,
			'recipe' => $recipe,
			'title' => $recipe->title,
			'description' => $recipe->description,
			'keywords' => $recipe->keywords,
		]);
	}

	protected function getRecipes()
	{
		$path = app_path() . '/data/recipes.json';
		$content = file_get_contents($path);
		if (!$content)
	  {
			App::abort(404);
		}
		return json_decode($content);
	}

	protected function getRecipe($id)
	{
		$recipes = $this->getRecipes();
		foreach ($recipes as $recipe)
		{
			if ($recipe->id == $id)
			{
				return $recipe;
			}
		}

		App::abort(404);
	}
}
