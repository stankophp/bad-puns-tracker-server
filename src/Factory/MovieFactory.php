<?php

namespace App\Factory;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Movie>
 *
 * @method        Movie|Proxy                     create(array|callable $attributes = [])
 * @method static Movie|Proxy                     createOne(array $attributes = [])
 * @method static Movie|Proxy                     find(object|array|mixed $criteria)
 * @method static Movie|Proxy                     findOrCreate(array $attributes)
 * @method static Movie|Proxy                     first(string $sortedField = 'id')
 * @method static Movie|Proxy                     last(string $sortedField = 'id')
 * @method static Movie|Proxy                     random(array $attributes = [])
 * @method static Movie|Proxy                     randomOrCreate(array $attributes = [])
 * @method static MovieRepository|RepositoryProxy repository()
 * @method static Movie[]|Proxy[]                 all()
 * @method static Movie[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Movie[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Movie[]|Proxy[]                 findBy(array $attributes)
 * @method static Movie[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Movie[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class MovieFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'count' => self::faker()->randomNumber(3),
            'title' => self::faker()->text(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Movie $movie): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Movie::class;
    }
}
