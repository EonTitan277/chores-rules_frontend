// Celebrates completion of the required daily chores on the chores page only.

(function initializeChoreFireworks() {
  let progressWasComplete = false;

  function randomInRange(min, max) {
    return Math.random() * (max - min) + min;
  }

  function launchFireworks() {
    if (typeof window.confetti !== 'function') {
      console.error('Canvas Confetti failed to load.');
      return;
    }

    const duration = 15 * 1000;
    const animationEnd = Date.now() + duration;
    const defaults = {
      startVelocity: 30,
      spread: 360,
      ticks: 60,
      zIndex: 1100,
      disableForReducedMotion: true,
    };

    const interval = window.setInterval(() => {
      const timeLeft = animationEnd - Date.now();
      if (timeLeft <= 0) {
        window.clearInterval(interval);
        return;
      }

      const particleCount = 50 * (timeLeft / duration);
      window.confetti({
        ...defaults,
        particleCount,
        origin: { x: randomInRange(0.1, 0.3), y: Math.random() - 0.2 },
      });
      window.confetti({
        ...defaults,
        particleCount,
        origin: { x: randomInRange(0.7, 0.9), y: Math.random() - 0.2 },
      });
    }, 250);
  }

  function checkForCompletion(event) {
    const progress = event.detail || {};
    const complete = progress.total > 0 && progress.percentage >= 100;
    if (complete && !progressWasComplete) {
      launchFireworks();
    }
    progressWasComplete = complete;
  }

  document.addEventListener('chore-progress:updated', checkForCompletion);
})();