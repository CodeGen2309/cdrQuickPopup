class quickPopup {
  constructor () {
    this.cover = document.querySelector('.rjPopup__cover')
    this.frame = document.querySelector('.rjPopup__frame')
    this.closeIcon = document.querySelector('.rjPopup__closeIcon')

    this.coverInvizClass = 'rjPopup__cover_inviz'
    this.coverInactiveClass = 'rjPopup__cover_inactive'
    this.frameInvizClass = 'rjPopup__frame_inviz'
    this.frameInactiveClass = 'rjPopup__frame_inactive'
    this.delay = arResult['SHOW_DELAY'] * 1000
    this.showtime = arResult['SHOW_TIME'] * 1000

    this.showPopup()
    this.closeIcon.addEventListener('click', () => this.hidePopup())
  }

  showPopup () {
    setTimeout(() => {
      this.cover.classList.remove(this.coverInactiveClass)
    }, this.delay);

    setTimeout(() => {
      this.cover.classList.remove(this.coverInvizClass)
    }, this.delay + 100);

    if (this.showtime > 0) {
      setTimeout(() => {
        this.hidePopup()
      }, this.showtime);
    }
  }

  hidePopup () {
    this.cover.classList.add(this.coverInvizClass)

    setTimeout(() => {
      this.cover.classList.add(this.coverInactiveClass)
    }, 1000);
  }
}

window.addEventListener('load', () => {
  let popUp = new quickPopup ()
})