function nextChapter(coursID, currentPosition)
{
    newPosition = parseInt(currentPosition) + 1;
    document.location.href = `http://localhost:8000/${coursID}/${newPosition}`;
}

function previousChapter(coursID, currentPosition)
{
    newPosition = parseInt(currentPosition) - 1;
    document.location.href = `http://localhost:8000/${coursID}/${newPosition}`;
}

function moveToChapter(coursID, position)
{
    document.location.href = `http://localhost:8000/${coursID}/${position}`;
}

function validateChapter(coursID, position)
{
    document.location.href = `http://localhost:8000/${coursID}/${position}/valider`;
}