<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Options\LessonsAchievementAttributes;
use App\Options\CommentAchievementAttributes;
use App\Models\User;

class UserAchievementsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $type = $this->faker->randomElement(CommentAchievementAttributes::ACHIEVEMENT_TYPE); 
        $name = $this->faker->randomElement(CommentAchievementAttributes::$title);

        return [
            'user_id' => User::factory(),
            'achievement_type' => $type,
            'achievement_name' => $name,
        ];
    }

     /**
     * Indicate the achievement type user achievement falls under.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function schedule(string $type = null)
    {
        return $this->state(function () use ($type) {

            switch ($type) {
                case 'Comment':
                    $type = $this->faker->randomElement(CommentAchievementAttributes::ACHIEVEMENT_TYPE); 
                    $name = $this->faker->randomElement(CommentAchievementAttributes::$title);
                    break;
                case 'LESSON':
                    $type = $this->faker->randomElement(LessonsAchievementAttributes::ACHIEVEMENT_TYPE); 
                    $name = $this->faker->randomElement(LessonsAchievementAttributes::$title);
                    break;
                default:
                    $type = $this->faker->randomElement(CommentAchievementAttributes::ACHIEVEMENT_TYPE); 
                    $name = $this->faker->randomElement(CommentAchievementAttributes::$title);
            }

            return [
                'achievement_type' => $type,
                'achievement_name' => $name,
            ];
        });
    }
}
