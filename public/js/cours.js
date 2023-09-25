function nextChapter(currentID)
{
    newID = parseInt(currentID) + 1;
    document.location.href = `http://localhost:8000/cours/${newID}`;
}

function previousChapter(currentID)
{
    newID = parseInt(currentID) - 1;
    document.location.href = `http://localhost:8000/cours/${newID}`;
}

function moveToChapter(id)
{
    document.location.href = `http://localhost:8000/cours/${id}`;
}