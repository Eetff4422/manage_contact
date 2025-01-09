<?php
require 'config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM contacts WHERE id = ?");
$stmt->execute([$id]);
$contact = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    $stmt = $pdo->prepare("UPDATE contacts SET nom = ?, email = ?, telephone = ? WHERE id = ?");
    $stmt->execute([$nom, $email, $telephone, $id]);

    header('Location: index.php');
    exit;
}
?>

<form action="modifier.php?id=<?= $contact['id'] ?>" method="POST">
    <input type="text" name="nom" value="<?= htmlspecialchars($contact['nom']) ?>" required>
    <input type="email" name="email" value="<?= htmlspecialchars($contact['email']) ?>" required>
    <input type="text" name="telephone" value="<?= htmlspecialchars($contact['telephone']) ?>">
    <button type="submit">Modifier</button>
</form>
