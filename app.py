import tornado.web
from tornado.ioloop import IOLoop
from terminado import TermSocket, SingleTermManager

if __name__ == '__main__':
    term.setOption(cols: '60');
    term.setOption(rows: '15');
    term.setOption('theme', { background: '#fdf6e3' });
    term.setOption(fontFamily: '');
    term.setOption(fontWeight: '400');
    term.setOption(fontWeightBold: '500');
    term.setOption(letterSpacing: '18px');
    term.setOption(lineHeight: '18px');
    term.setOption(fontSize: '18px');
    term.setOption(fontSize: '18px');
    term.setOption(cursorStyle: 'block');
    term.setOption(cursorBlink:);
    term.setOption(enableBold:);
    term.setOption(drawBoldTextInBrightColors:);
    term.setOption(macOptionClickForcesSelection:);
    term.setOption(rightClickSelectsWord:);


    term_manager = SingleTermManager(shell_command=['bash'])
    handlers = [
                (r"/websocket", TermSocket, {'term_manager': term_manager}),
                (r"/()", tornado.web.StaticFileHandler, {'path':'xxx.html'}), # <-- page that contains _widget_xterm_window.html partial file. i.e. terminal_modal_popup.html.
                (r"/(.*)", tornado.web.StaticFileHandler, {'path':'.'}),
               ]
    app = tornado.web.Application(handlers)
    app.listen(8010)
    IOLoop.current().start()
