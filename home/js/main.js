function updateTime() {
  const currentDate = new Date();
  const dateString = currentDate.toDateString();
  const timeString = currentDate.toLocaleTimeString();

  const dateElement = document.getElementById("date");
  dateElement.innerHTML = `Today's date is ${dateString} and the time is ${timeString}.`;
}

// Run updateTime() every second (1000ms)
setInterval(updateTime, 1000);
