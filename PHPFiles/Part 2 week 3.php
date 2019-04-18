<?php
function demon($month, $day)
{
    $x=0;
    if ($month == 01)
    {
        if ($day <20)
        {
            echo "You are a Capricorn and your symbol is the goat";
            $x=$x+12;
        }
        else if ($day >=20)
        {
            echo "You are an Aquarius and your symbol is the water bearer";
            $x=$x+1;
        }
    }
    else if ($month == 02)
    {
        if ($day <19)
        {
            echo "You are an Aquarius and your symbol is the water bearer";
            $x=$x+1;
        }
        else if ($day >= 19)
        {
            echo "You are a Pisces and your symbol is the fishes";
            $x=$x+2;
        }
    }
    else if ($month == 03)
    {
        if ($day <21)
        {
            echo "You are a Pisces and your symbol is the fishes";
            $x=$x+2;
        }
        else if ($day >= 21)
        {
            echo "You are an Aries and your symbol is the ram";
            $x=$x+3;
        }
    }
    else if ($month == 04)
    {
        if ($day <20)
        {
            echo "You are a Aries and your symbol is the ram";
            $x=$x+3;
        }
        else if ($day >= 20)
        {
            echo "You are a Taurus and your symbol is the bull";
            $x=$x+4;
        }
    }
    else if ($month == 05)
    {
        if ($day <21)
        {
            echo "You are a Taurus and your symbol is the bull";
            $x=$x+4;
        }
        else if ($day >= 21)
        {
            echo "You are a Gemini and your symbol is the twins";
            $x=$x+5;
        }
    }
    else if ($month == 06)
    {
        if ($day <21)
        {
            echo "You are a Gemini and your symbol is the twins";
            $x=$x+5;
        }
        else if ($day >= 21)
        {
            echo "You are a Cancer and your symbol is the crab";
            $x=$x+6;
        }
    }
    else if ($month == 07)
    {
        if ($day <23)
        {
            echo "You are a Cancer and your symbol is the crab";
            $x=$x+6;
        }
        if ($day >= 23)
        {
            echo "You are a Leo and your symbol is the lion";
            $x=$x+7;
        }
    }
    else if ($month == 8)
    {
        if ($day <23)
        {
            echo "You are a Leo and your symbol is the lion";
            $x=$x+7;
        }
        if ($day >= 23)
        {
            echo "You are a Virgo and your symbol is the virgin";
            $x=$x+8;
        }
    }
    else if ($month == 9)
    {
        if ($day <23)
        {
            echo "You are a Virgo and your symbol is the virgin";
            $x=$x+8;
        }
        if ($day >= 23)
        {
            echo "You are a Libra and your symbol is the scales";
            $x=$x+9;
        }
    }
    else if ($month == 10)
    {
        if ($day <23)
        {
            echo "You are a Libra and your symbol is the scales";
            $x=$x+9;
        }
        if ($day >= 23)
        {
            echo "You are a Scorpio and your symbol is the scorpion";
            $x=$x+10;
        }
    }
    else if ($month == 11)
    {
        if ($day <22)
        {
            echo "You are a Scorpio and your symbol is the scorpion";
            $x=$x+10;
        }
        if ($day >= 22)
        {
            echo "You are a Sagittarius and your symbol is the archer";
            $x=$x+11;
        }
    }
    else if ($month == 12)
    {
        if ($day <22)
        {
            echo "You are a Sagittarius and your symbol is the archer";
            $x=$x+11;
        }
        if ($day >= 22)
        {
            echo "You are a Capricorn and your symbol is the goat";
            $x=$x+12;
        }
    }
    if ($x == 1)
    {
        echo "<br />Aquarius-born are shy and quiet , but on the other hand they can be eccentric and energetic. <br />
        However, in both cases, they are deep thinkers and highly intellectual people who love helping others.<br />
        They are able to see without prejudice, on both sides, which makes them people who can easily solve problems.<br />
        Although they can easily adapt to the energy that surrounds them, Aquarius-born have a deep need to be some<br />
        time alone and away from everything, in order to restore power. People born under the Aquarius sign, look at <br />
        the world as a place full of possibilities.";
    }
    else if ($x == 2)
    {
        echo "<br />Pisces are very friendly, so they often find themselves in a company of very different people.<br />
        Pisces are selfless, they are always willing to help others, without hoping to get anything back.<br />
        Pisces is a Water sign and as such this zodiac sign is characterized by empathy and expressed emotional capacity.";
    }
    else if ($x == 3)
    {
        echo "<br />As the first sign in the zodiac, the presence of Aries always marks the beginning of something<br />
        energetic and turbulent. They are continuously looking for dynamic, speed and competition, always being<br />
        the first in everything - from work to social gatherings.";
    }
    else if ($x == 4)
    {
        echo "<br />Practical and well-grounded, Taurus is the sign that harvests the fruits of labor. They feel the<br />
        need to always be surrounded by love and beauty, turned to the material world, hedonism, and physical <br />
        pleasures. People born with their Sun in Taurus are sensual and tactile, considering touch and taste the<br />
        most important of all senses. Stable and conservative, this is one of the most reliable signs of the zodiac,<br />
        ready to endure and stick to their choices until they reach the point of personal satisfaction.";
    }
    else if ($x == 5)
    {
        echo "<br />Expressive and quick-witted, Gemini represents two different personalities in one and you will never be<br />
        sure which one you will face. They are sociable, communicative and ready for fun, with a tendency to suddenly<br />
        get serious, thoughtful and restless. They are fascinated with the world itself, extremely curious, with a<br />
        constant feeling that there is not enough time to experience everything they want to see.";
    }
    else if ($x == 6)
    {
        echo "<br />Deeply intuitive and sentimental, Cancer can be one of the most challenging zodiac signs to get to know.<br />
        They are very emotional and sensitive, and care deeply about matters of the family and their home. Cancer is<br />
        sympathetic and attached to people they keep close. Those born with their Sun in Cancer are very loyal and able<br />
        to empathize with other people's pain and suffering.";
    }
    else if ($x == 7)
    {
        echo "<br />People born under the sign of Leo are natural born leaders. They are dramatic, creative, self-confident, dominant<br />
        and extremely difficult to resist, able to achieve anything they want to in any area of life they commit to. There is a <br />
        specific strength to a Leo and their 'king of the jungle' status. Leo often has many friends for they are generous and loyal.<br />
        Self-confident and attractive, this is a Sun sign capable of uniting different groups of people and leading them as one towards<br />
        a shared cause, and their healthy sense of humor makes collaboration with other people even easier.";
    }
    else if ($x == 8)
    {
        echo "<br />Virgos are always paying attention to the smallest details and their deep sense of humanity makes them one of the most<br />
        careful signs of the zodiac. Their methodical approach to life ensures that nothing is left to chance, and although they are<br />
        often tender, their heart might be closed for the outer world. This is a sign often misunderstood, not because they lack the<br />
        ability to express, but because they won’t accept their feelings as valid, true, or even relevant when opposed to reason. The<br />
        symbolism behind the name speaks well of their nature, born with a feeling they are experiencing everything for the first time.";
    }
    else if ($x == 9)
    {
        echo "<br />People born under the sign of Libra are peaceful, fair, and they hate being alone. Partnership is very important for them, as<br />
        their mirror and someone giving them the ability to be the mirror themselves. These individuals are fascinated by balance and symmetry,<br />
        they are in a constant chase for justice and equality, realizing through life that the only thing that should be truly important to <br />
        themselves in their own inner core of personality. This is someone ready to do nearly anything to avoid conflict, keeping the peace whenever possible";
    }
    else if ($x == 10)
    {
        echo "<br />Scorpio-born are passionate and assertive people. They are determined and decisive, and will research until they find out the truth.<br />
        Scorpio is a great leader, always aware of the situation and also features prominently in resourcefulness.";
    }
    else if ($x == 11)
    {
        echo "<br />Curious and energetic, Sagittarius is one of the biggest travelers among all zodiac signs. Their open mind and philosophical view<br />
        motivates them to wander around the world in search of the meaning of life.Sagittarius is extrovert, optimistic and enthusiastic, and likes<br />
        changes. Sagittarius-born are able to transform their thoughts into concrete actions and they will do anything to achieve their goals.";
    }
    else if ($x == 12)
    {
        echo "<br />Capricorn is a sign that represents time and responsibility, and its representatives are traditional and often very serious by <br />
        nature. These individuals possess an inner state of independence that enables significant progress both in their personal and professional<br />
        lives. They are masters of self-control and have the ability to lead the way, make solid and realistic plans, and manage many people who<br />
        work for them at any time. They will learn from their mistakes and get to the top based solely on their experience and expertise.";
    }
}
demon(07,07);