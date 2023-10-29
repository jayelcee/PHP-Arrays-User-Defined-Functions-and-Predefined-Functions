<!DOCTYPE html>
<html>
<head>
    <title>My Fruits</title>
    <style>
        img {
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        /* CSS styles for table */
        table {
            margin: 0 auto;
            border-collapse: collapse;
            background: linear-gradient(to left, #33ccff 0%, #ffff99 100%);
        }
       
        th, td {
            padding: 10px;
            border: 1px solid black;
        }

        tr {
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- <h1 style="text-align: center;">My Fruits</h1> -->
    <table>
        <tr>
            <th colspan="4" style="text-align: center;">MY FRUITS</th>
        </tr>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Facts</th>
        </tr>
       
        <?php
        // Array of fruits with their details
        $fruits = [
            [
                'image' => 'banana.png',
                'name' => 'Banana',
                'description' => 'Color Yellow',
                'facts' => 'Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients and are a good source of fiber.'
            ],
            [
                'image' => 'apple.png',
                'name' => 'Apple',
                'description' => 'Color Red or Green',
                'facts' => 'Apples are rich in antioxidants and dietary fiber. The saying "An apple a day keeps the doctor away" is popular for a reason!'
            ],
            [
                'image' => 'orange.png',
                'name' => 'Orange',
                'description' => 'Color Orange',
                'facts' => 'Oranges are an excellent source of vitamin C, which is essential for a healthy immune system and skin.'
            ],
            [
                'image' => 'strawberry.png',
                'name' => 'Strawberry',
                'description' => 'Color Red',
                'facts' => 'Strawberries are packed with antioxidants, vitamins, and fiber. They are also delicious!'
            ],
            [
                'image' => 'pineapple.png',
                'name' => 'Pineapple',
                'description' => 'Color Yellow',
                'facts' => 'Pineapples are tropical fruits known for their sweet and tangy flavor. They are a good source of vitamin C and manganese.'
            ],
            [
                'image' => 'grape.png',
                'name' => 'Grape',
                'description' => 'Color Purple or Green',
                'facts' => 'Grapes are small fruits that come in various colors and flavors. They are rich in antioxidants and are a great snack option.'
            ],
            [
                'image' => 'watermelon.png',
                'name' => 'Watermelon',
                'description' => 'Color Green (outer) and Red (inner)',
                'facts' => "Watermelon is a refreshing fruit that is mostly water. It's perfect for staying hydrated during hot summer days."
            ],
            [
                'image' => 'kiwi.png',
                'name' => 'Kiwi',
                'description' => 'Color Brown (outer) and Green (inner)',
                'facts' => 'Kiwi fruit is a nutrient-dense fruit that is high in vitamin C, vitamin K, and fiber.'
            ],
            [
                'image' => 'pear.png',
                'name' => 'Pear',
                'description' => 'Color Green or Yellow',
                'facts' => 'Pears are juicy and sweet fruits that are rich in dietary fiber, antioxidants, and vitamin C.'
            ],
            [
                'image' => 'mango.png',
                'name' => 'Mango',
                'description' => 'Color Yellow or Orange',
                'facts' => 'Mangoes are tropical fruits that are not only delicious but also packed with vitamins, minerals, and antioxidants.'
            ],
        ];

        // Sort fruits alphabetically by name
        usort($fruits, function ($a, $b) {
            return strcmp($a['name'], $b['name']);
        });

        // Display fruits in the table
        foreach ($fruits as $fruit) {
            echo "<tr>";
            echo "<td><img src='{$fruit['image']}'></td>";
            echo "<td>{$fruit['name']}</td>";
            echo "<td>{$fruit['description']}</td>";
            echo "<td>{$fruit['facts']}</td>";
            echo "</tr>";
        }
        ?>
       
    </table>
</body>
</html>