<?php
// song.php – PHP Lyric Remix without loops


$title = "I Love You So";
$artist = "The Walters";
$mood = "Yearning";


$verseCount = 2;
$repeatChorus = 2;

$nouns = ["love", "heart", "soul", "feeling", "mind", "things", "time", "lovers"];
$verbs = ["love", "deal", "spend", "handle", "hope", "feel", "shattered", "get", "leave", "go", "pack"];


$verse1 = [
    "I just need someone in my life to give it structure",
    "To handle all the selfish ways I'd spend my time without her",
    "You're everything I want, but I can't deal with all your lovers",
    "You're saying I'm the one, but it's your actions that speak louder",
    "Giving me love when you are down and need another",
    "I've gotta get away and let you go, I've gotta get over"
];

$chorus = [
    "But I love you soo (ooh)",
    "I love you so (ooh)",
    "I love you so (ooh)",
    "I love you so"
];

$verse2 = [
    "I'm gonna pack my things and leave you behind",
    "This feeling's old, and I know that I've made up my mind",
    "I hope you feel what I felt when you shattered my soul",
    "'Cause you were cruel, and I'm a fool, so please, let me go"
];


$totalSections = $verseCount + 1;
$linesPerChorus = count($chorus) * $repeatChorus;

// Type juggling examples
$repeatAsString = "2"; // string
$numericRepeat = $repeatAsString + 0; // string -> int

$headerText = $title . " — " . $artist; // concatenation
$footer = "Bacani, Ivan L.";
$footer .= " — Yearner";

$summary = "Sections: " . $totalSections . " | Repeats: " . $numericRepeat;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?= htmlspecialchars($headerText) ?></title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 750px; margin: 20px auto; padding: 10px; line-height: 1.5; color: #222; }
        header { border-bottom: 1px solid #ddd; margin-bottom: 15px; padding-bottom: 10px; }
        h1 { font-size: 24px; margin: 0; }
        h2 { margin: 5px 0 0 0; font-size: 16px; color: #666; }
        .meta { font-size: 13px; color: #777; margin-top: 5px; }
        .section { margin: 15px 0; }
        .section h3 { margin-bottom: 5px; font-size: 18px; color: #333; }
        .line { margin: 3px 0; white-space: pre-line; }
        footer { border-top: 1px solid #eee; margin-top: 20px; padding-top: 10px; font-size: 13px; color: #666; }
        .chorus-block { margin: 10px 0; padding: 8px; background: #f8f8f8; border-left: 3px solid #bbb; }
    </style>
    </head>
    <body>

    <header>
        <h1><?= htmlspecialchars($title) ?></h1>
        <h2><?= htmlspecialchars($artist) ?></h2>
        <div class="meta">
        Mood: <?= htmlspecialchars($mood) ?> |
        Verses defined: <?= $verseCount ?> |
        Chorus repeats: <?= $numericRepeat ?>
    </div>
    </header>

    <main>
        <!-- Verse 1 -->
        <section class='section'>
        <h3>Verse 1</h3>
        <p class='line'><?= htmlspecialchars($verse1[0]) ?></p>
        <p class='line'><?= htmlspecialchars($verse1[1]) ?></p>
        <p class='line'><?= htmlspecialchars($verse1[2]) ?></p>
        <p class='line'><?= htmlspecialchars($verse1[3]) ?></p>
        <p class='line'><?= htmlspecialchars($verse1[4]) ?></p>
        <p class='line'><?= htmlspecialchars($verse1[5]) ?></p>
        </section>

    <!-- Chorus repeated manually -->
        <section class='chorus-block'>
            <h3>Chorus (repeat 1 of <?= $numericRepeat ?>)</h3>
            <p class='line'><?= htmlspecialchars($chorus[0]) ?></p>
            <p class='line'><?= htmlspecialchars($chorus[1]) ?></p>
            <p class='line'><?= htmlspecialchars($chorus[2]) ?></p>
            <p class='line'><?= htmlspecialchars($chorus[3]) ?></p>
        </section>

    <?php if ($numericRepeat > 1): ?>
    <section class='chorus-block'>
        <h3>Chorus (repeat 2 of <?= $numericRepeat ?>)</h3>
        <p class='line'><?= htmlspecialchars($chorus[0]) ?></p>
        <p class='line'><?= htmlspecialchars($chorus[1]) ?></p>
        <p class='line'><?= htmlspecialchars($chorus[2]) ?></p>
        <p class='line'><?= htmlspecialchars($chorus[3]) ?></p>
    </section>
    <?php endif; ?>

    <!-- Verse 2 -->
    <section class='section'>
        <h3>Verse 2</h3>
        <p class='line'><?= htmlspecialchars($verse2[0]) ?></p>
        <p class='line'><?= htmlspecialchars($verse2[1]) ?></p>
        <p class='line'><?= htmlspecialchars($verse2[2]) ?></p>
        <p class='line'><?= htmlspecialchars($verse2[3]) ?></p>
    </section>


    <section class='section'>
        <h3>Remix Lines</h3>
        <p class='line'><?= ucfirst($nouns[0]) . " will " . $verbs[0] . " in the " . $nouns[2] . "." ?></p>
        <p class='line'><?= $nouns[1] . " and " . $nouns[0] . " — " . $verbs[2] . " forever." ?></p>
    </section>

    </main>

    <footer>
        <div><?= htmlspecialchars($summary) ?></div>
        <div><?= htmlspecialchars($footer) ?></div>
        <div style="margin-top:.4rem; font-size:.8rem; color:#888;">
    </div>
    </footer>

</body>
</html>