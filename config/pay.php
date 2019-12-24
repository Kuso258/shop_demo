<?php

return [
    'alipay' => [
        'app_id'         => '2016091100482919',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwbC6SJY5p0e4Q/LYRLxTXJkpn1HAEWuk8m7GJPBYLCtV1DFSC45TQl3bhkI9sJuN7RMmmqrmyd9zOYSt1F93br7bRddX8RwrJth1risPNX1rbzXl5bshw9/9UXmdykjjEpFh9sGXSqaU/xG10CkERt5m7pTEbqUgzSNXQasUyanB1IeticSzxYy0PZKjWa5ItDYycGcjLOAm3CIgUYeCH0yhh2vtOvUI0Zf5yOU3kOqSFKiB4m9zRFTws9XTHzyGgjnK9dRSeV2kIXdCBXV6uQG2UusfJOMC5bEiqxZAZao1oTX8uD59/qlJIUhbfZr7sKMNKSPcJQMEmWidGhhtGQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAo+8BtWaKHf4U2qE1BgKsDW8vRJL1VRbh+fvykITcAxCFB5BNL/5TT9p2LzkorJhlwOuLlwlnEzLY08xix7YJz29N6m7E4LJDdlrf2uTxTzfMK71avkmGo+E0oucLk1ZAoVsoApMUmYjPKrq9OcUsNj6QbbwxgJ+vDlGXpvuBRt3drHRkPM0izEBiWXkox3ZBXKSdj24jp3lWYqidf0YvI36xuqVp/9+4OQekfF8e8/n5ePiO6r/+QY1Bidgh55xKy4pzvQAa8EP0nvurcr+5QQZfdxwE6CdIG+tHYNnjYfJfj/NY9FM/mEOID11CH3oE/mlpBAj9O0BS8ZQNsFB8nQIDAQABAoIBAFRkVBLYiL3L8VxjpPJFKeF4nXLF3LpDH24bv9GaM9D4DiPIq5PLb4QqSLEi0ceYZLmeCKxmUMPXZzwRecCp+/7no8rN31h1LLmfKqJ7Paa0aM0Tm8VeAIwZAYnjO1hMDNWEIeLBaNdpUI0EuSkmUg5SwvNa8Hjwu6O5aUKzMugRtzlGpaIHlBGr++3NJAhi1HCeTVNrDliVTR85fuZXSmCDb59wb92NzeWSzzOJchoGz+0LJTPzjec3NyZwCrKyvlhSNZwz1dnwyUm5KdmSijKls11nmp8To5PAmJBHTiC7bVRJ9YgG0BCpVZv5Zjft/yF1CwK2CzoMsuUIrdjpn4ECgYEA5MDvGcjF6PaPLT4j45UhwEU4AQFiiHkt6lc2OPQxSFAql8MzvLlv9o5nD0Snergoid6dl1ofR/sSBDKqnLi9iSc2EefRBx4WAgwM1wWPp4MIv8/q3miAqIcz8W4BEBvjXgtOyiMBFJIluJ5my+8z6HCZHJ+XWrSGcza6MdHe7c0CgYEAt3WbHzJ5kxbPn2ol3Mp5zM697Hj6fVz6WvfOAgYBADNsQp2mCdzQ0ys8jbP4u68phDZ112oTWdGW042LJWc41PPckevvw4M3EvSGXPEvAj0ajG6jxdLnNNq4fJg7xKi8HYzITFUuOyzGD94dR6Jov/C+QDknk92jZDdi9xjrehECgYEA2SiLE3g04VaHT1TpbxhZBRTw+ItfBd28B/Yo5GJ1EogAFzhZOjT0JCTFk4oCUA7ZdSCfjFoizgt76/5JVyRN0hEmVFM0bURTcjgMTGfcGxLa0HTKK78bPGG1nuFmIuvGqbWkY2JdmTCwnJXLUphPN78Eq1aZsaMk6+UtVzQ8JJUCgYEAgXoqEZmA/hNyUvMKZ8oqriYXGobDWqi9NGiB5yGvoSGpvVYf8gP7CZ4RLX0gBe34ogwBnReLMq/d/858rtgr3veA6yeV3umDfAhBr+S0JaNUUlpfkWVosf/Phne2bvQbV8udLWpMp4zQ+C/tgDoaLaTN0OvFh/E7uKXyXawjvNECgYB7N3KxLhVRmSbGp+kT6rQvFZAAiMdm91pebejph90v0oLvwCgaD/WLRsIKh7NtqtTj4idbavpa5w+n6GbZ5shgS2CDdXjS9MJ6YmdcVC9J1QjJe/Zz5XzoKOZvixyJ0gQrHF4CmdqMdW98G7Cr37PfRrjDTaMXyBjQvyV16oUdeA==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];

?>